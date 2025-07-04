<?php

namespace Pagarme\Core\Kernel\I18N;

use Pagarme\Core\Kernel\Abstractions\AbstractI18NTable;
use Pagarme\Core\Kernel\Services\InstallmentService;

class PTBR extends AbstractI18NTable
{
    protected function getTable()
    {
        return [
            'Invoice created: #%s.' => 'Invoice criada: #%s',
            'Invoice canceled: #%s.' => 'Invoice cancelada: #%s',
            'Webhook received: %s %s.%s' => 'Webhook recebido: %s %s.%s',
            'Order paid.' => 'Pedido pago.',
            'Order created at Pagarme. Id: %s' => 'Pedido criado na Pagarme. Id %s',
            'Order pending at Pagarme. Id: %s' => 'Pedido pendente na Pagarme. Id %s',
            'Order waiting for online retries at Pagarme.' => 'Pedido aguardando por retentativas online na Pagarme.',
            'Order canceled.' => 'Pedido cancelado.',
            'Payment received: %.2f' => 'Pagamento recebido: %.2f',
            'Canceled amount: %.2f' => 'Quantia cancelada: %.2f',
            'Refunded amount: %.2f' => 'Quantia estornada: %.2f',
            'Partial Payment' => 'Pagamento Parcial',
            'Charge canceled.' => 'Cobrança cancelada.',
            'Charge not found' => 'Cobrança não encontrada',
            'Creditmemo created: #%s.' => 'Creditmemo criado: #%s.',
            'until now' => 'até agora',
            'Extra amount paid: %.2f' => "Quantia extra paga: %.2f",
            "Order '%s' canceled at Pagarme" => "Pedido '%s' cancelado na Pagarme",
            'Remaining amount: %.2f' => "Quantidade faltante: %.2f",
            "Some charges couldn't be canceled at Pagarme. Reasons:" => "Algumas cobranças não puderam ser canceladas na Pagarme. Razões:",
            "without interest" => "sem juros",
            "with interest" => "com juros",
            "%dx of %s %s (Total: %s)" => "%dx de %s %s (Total: %s)",
            "Order payment failed" => "Pagamento do pedido falhou",
            "The order will be canceled" => "O pedido será cancelado",
            "An error occurred when trying to create the order. Please try again. Error Reference: %s" => 'Ocorreu um erro ao tentar criar o pedido. Por favor, tente novamente. Referência do erro: %s',
            "Can't cancel current order. Please cancel it by Pagarme panel" => "Não foi possível cancelar o pedido. Por favor, realize o cancelamento no portal Pagarme.",
            "Charge canceled with success" => "Charge cancelada com sucesso",
            'Invalid address. Please fill the street lines and try again.' => 'Endereço inválido. Preencha rua, número e bairro e tente novamente.',
            "The informed card couldn't be deleted." => "O cartão informado não pode ser deletado.",
            "The card '%s' was deleted." => "O cartão '%s' foi deletado.",
            "The card '%s' couldn't be deleted." => "O cartão '%s' não pôde ser deletado.",
            "Different paid amount for this invoice. Paid value: %.2f" => "Esta Invoice foi paga com um valor diferente do Grand Total do pedido. Valor pago: %.2f",
            "The %s should not be empty!" => "O campo %s é obrigatório!",
            "The %s is invalid!" => "Campo %s inválido!",
            "street" => "rua",
            "number" => "número",
            "neighborhood" => "bairro",
            "zipCode" => "CEP",
            "city" => "cidade",
            "country" => "país",
            "state" => "estado",
            "phone" => "telefone",
            "document" => "CPF/CNPJ",
            "Can't create order." => "Não foi possível criar o pedido.",
            "Can't create payment. Please review the information and try again." => "Não foi possível realizar o pagamento. Por favor revise os dados e tente novamente.",
            'Issuing bank does not accept the selected installment. Please select a smaller installment option.' => InstallmentService::INSTALLMENT_OVER_ISSUER_LIMIT_ERROR_MESSAGE_PTBR,
            'Invalid address configuration. Please fill the address configuration on admin panel.' => 'Configurações de endereço inválidas. Preencha as configurações de endereço no painel de administração',
            'week' => "semana",
            'weeks' => "semanas",
            'month' => "mês",
            'months' => "meses",
            'year' => "ano",
            'years' => "anos",
            'discount' => "desconto",
            'Credit Card' => "Cartão de Crédito",
            'Subscription invoice paid.' => 'Fatura de assinatura paga.',
            'invoice' => 'fatura',
            'Subscription canceled with success!' => "Assinatura cancelada com sucesso!",
            'Error on cancel subscription' => "Erro ao cancelar a assinatura",
            'Subscription not found' => "Assinatura não encontrada",
            'Subscription already canceled' => "Assinatura já está cancelada",
            'monthly' => 'Mensal',
            'bimonthly' => 'Bimestral',
            'quarterly' => 'Trimestral',
            'yearly' => 'Anual',
            'biennial' => 'Bienal',
            'Subscription created at Pagarme. Id: %s' => 'Assinatura criada na Pagarme. Id %s',
            'weekly' => 'Semanal',
            'semiannual' => 'Semestral',
            'New order status: %s' => 'Novo status do pedido: %s',
            'Subscription invoice created: %.2f' => 'Fatura de assinatura criada: %.2f',
            'Url boleto' => 'Boleto url',
            'You can only add two or more subscriptions to your cart that have the same payment method (credit card or boleto) and same frequency (monthly, annual, etc)' => 'Você só pode adicionar duas ou mais assinaturas que possuam o mesmo tipo de pagamento (cartão e ou boleto) e mesma frequência (mensal, semestral, anual...).',
            "It's not possible to have any other product with a product plan" => 'Não é possível ter nenhum outro tipo de produto no carrinho, junto com um produto plano',
            'You must have only one product plan in the cart' => 'Você só pode ter um produto plano no carrinho',
            'Pagarme module should be configured on Websites scope, please change to website scope to apply these changes' => 'O módulo da Pagarme deve ser configurado no escopo de Websites/Default, favor mudar para o escopo de Websites/Default para aplicar as mudanças.',
            'Antifraud aproved' => 'Aprovado no antifraude',
            'Antifraud reproved' => 'Reprovado no antifraude',
            'Antifraud pending' => 'Analise pendente no antifraude',
            'Waiting manual analise in antifraud' => 'Aguardando análise manual em antifraude',
            "Can't connect to the payment service. Please contact the store administrator." => "Não foi possivel conectar com o serviço de pagamento. Por favor contate o administrador da loja.",
            "The sum of payments is different than the order amount! Review the information and try again." => "A soma dos pagamentos é diferente do valor do pedido! Verifique as informações de sua compra e tente novamente.",
            "The sum of payments is greater than the order amount! Review the information and try again." => "A soma dos pagamentos é maior do que o valor do pedido! Verifique as informações de sua compra e tente novamente.",
            "The card brand '%s' or the amount %.2f doesn't allow %d installment(s)! Please review the information and try again." => "A bandeira do cartão '%s' ou o valor %.2f não permite %d parcela(s)! Por favor revise os dados e tente novamente.",
            "Passed value:" => "Valor informado:",
            "ChargeId: %s - Split rules:" => "ChargeId: %s - Regras de Split:",
            "name" => "Nome",
            "documentType" => "Tipo do Documento",
            "type" => "Tipo",
            "holderName" => "Nome do Titular",
            "holderType" => "Tipo do Titular",
            "holderDocument" => "Documento do Titular",
        ];
    }
}
